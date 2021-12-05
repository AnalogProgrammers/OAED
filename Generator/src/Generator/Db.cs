using Microsoft.EntityFrameworkCore;

namespace Generator;
public class Db : DbContext
{
    private readonly string ip;

    public Db(string ip) => this.ip = ip;

#nullable disable

    public DbSet<User> Users { get; set; }

    public DbSet<Location> Locations { get; set; }

    public DbSet<Company> Companies { get; set; }

    public DbSet<Unemployed> Unemployeds { get; set; }

    public DbSet<Form> Forms { get; set; }

    public DbSet<Job> Jobs { get; set; }

    public DbSet<Meeting> Meetings { get; set; }

    public DbSet<Training> Trainings { get; set; }

#nullable restore

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        base.OnConfiguring(optionsBuilder);
        optionsBuilder.UseMySQL(@$"server={ip};uid=panos;password=analog_12345;database=oaed");
    }
}
