using Generator;
using Spectre.Console;
using System.Reactive.Linq;
using static Spectre.Console.AnsiConsole;

await Status().StartAsync("Generating", static async ctx =>
{
    ctx.Spinner(Spinner.Known.Star);
    ctx.SpinnerStyle(Style.Parse("green"));

    var Names = new Bogus.DataSets.Name();
    var Emails = new Bogus.DataSets.Internet();
    var Lorem = new Bogus.DataSets.Lorem();
    var Locations = new Bogus.DataSets.Address();
    var Companies = new Bogus.DataSets.Company();
    var Randomizer = new Bogus.Randomizer();

    var db = new Db("172.16.177.63");

    MarkupLine("Loading Data");

    var locations = db.Locations.ToArray();
    var users = db.Users.ToArray();
    var companies = db.Companies.ToArray();
    var unemployeds = db.Unemployeds.ToArray();
    var forms = db.Forms.ToArray();
    var jobs = db.Jobs.ToArray();
    var meetings = db.Meetings.ToArray();
    var trainings = db.Trainings.ToArray();

    int RandLocation() => locations[Randomizer.Number(0, 9)].Id;

    await Generate(
        () => locations.Length < 10,
        () => Enumerable
            .Range(0, 10)
            .Select(count => new Location
            {
                Name = Locations.City()
            })
            .ToArray());

    await Generate(
        () => users.Length < 20,
        () => Enumerable
            .Range(0, 20)
            .Select(count => new User
            {
                Name = Names.FirstName(),
                Subname = Names.LastName(),
                Password = @"$2y$10$kSihppme8A1O1Yv1/YzuX.XAvahJ22m44wEtB4UXoFf8fLekrpbFS", //12345678
                Type = count < 15 ? 0 : 1,
                Uuid = Guid.NewGuid().ToString(),
                LocationId = RandLocation()
            })
            .Select(user =>
            {
                user.Email = Emails.ExampleEmail(user.Name);
                return user;
            })
            .ToArray());

    await Generate(
        () => companies.Length < 10,
        () => Enumerable
            .Range(0, 10)
            .Select(count => new Company
            {
                Name = Companies.CompanyName(),
                Afm = Randomizer.Number(1_000_000, 9_999_999),
                LocationId = RandLocation()
            })
            .ToArray());

    await Generate(
        () => unemployeds.Length < 50,
        () => Enumerable
            .Range(0, 50)
            .Select(count => new Unemployed
            {
                Uuid = Guid.NewGuid().ToString(),
                LocationId = RandLocation(),
                Name = Names.FirstName()
            })
            .ToArray());

    await Generate(
        () => forms.Length is < 20,
        () => unemployeds
            .Where(x => !forms.Any(x => x.UnemployedId == x.Id))
            .Select(x => new Form
            {
                Completed = x.Id % 2 == 0 ? 0 : 1,
                UnemployedId = x.Id
            })
            .ToArray());

    await Generate(
        () => jobs.Length < 10,
        () => Enumerable
            .Range(0, 10)
            .Select(count => new Job
            {
                Date = DateTime.Now.AddDays(-count),
                Position = Names.JobTitle(),
                CompanyId = companies[Randomizer.Number(0, 5)].Id,
                UnemployedId = unemployeds[Randomizer.Number(0, 5)].Id,
                UserId = users[Randomizer.Number(0, 5)].Id,
            })
            .ToArray());

    await Generate(
        () => meetings.Length < users.Where(x => x.Type is 0).Count(),
        () => users
            .Where(x => x.Type is 0)
            .SelectMany(user => Enumerable
                .Range(0, 5)
                .Select(c =>
                    new Meeting
                    {
                        Complete = c == 0 ? 0 : 1,
                        Date = DateTime.Now.AddDays(c),
                        Duration = 60,
                        UnemployedId = unemployeds[Randomizer.Number(0, unemployeds.Length - 1)].Id,
                        UserId = user.Id,
                    }))
            .ToArray());

    await Generate(
        () => trainings.Length < 20,
        () => Enumerable
            .Range(0, 20)
            .Select(c => unemployeds[c])
            .Select(x => new Training
            {
                UnemployedId = x.Id,
                UserId = users.Where(x => x.LocationId == x.LocationId).First().Id,
                Completed = x.Id % 2 == 0 ? "true" : "false",
                Name = Names.JobTitle(),
                Description = string.Join(' ', Lorem.Words(4))
            })
            .ToArray());

    async Task Generate<T>(Func<bool> criteria, Func<T[]> generator)
    {
        var name = typeof(T).Name + "s";

        if (!criteria())
        {
            MarkupLine($"{name} Exist!");
            return;
        };

        MarkupLine($"Generating {name}");

        db!.AddRange(generator());
        await db.SaveChangesAsync();

        MarkupLine($"Generated {name}");
    }
});
