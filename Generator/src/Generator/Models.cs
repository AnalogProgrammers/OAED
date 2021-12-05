using System.ComponentModel.DataAnnotations.Schema;

namespace Generator;

[Table("users")]
public class User
{
    [Column("id")]
    public int Id { get; set; }

    [Column("email")]
    public string? Email { get; set; }

    [Column("password")]
    public string? Password { get; set; }

    [Column("name")]
    public string? Name { get; set; }

    [Column("subname")]
    public string? Subname { get; set; }

    [Column("type")]
    public int? Type { get; set; }

    [Column("location")]
    public int? LocationId { get; set; }

    [Column("uuid")]
    public string? Uuid { get; set; }
}

[Table("locations")]
public class Location
{
    [Column("id")]
    public int Id { get; set; }

    [Column("name")]
    public string? Name { get; set; }
}

[Table("companies")]
public class Company
{
    [Column("id")]
    public int Id { get; set; }

    [Column("afm")]
    public int? Afm { get; set; }

    [Column("location")]
    public int? LocationId { get; set; }

    [Column("name")]
    public string? Name { get; set; }
}

[Table("unemployeds")]
public class Unemployed
{
    [Column("id")]
    public int Id { get; set; }

    [Column("name")]
    public string? Name { get; set; }

    [Column("location")]
    public int? LocationId { get; set; }

    [Column("uuid")]
    public string? Uuid { get; set; }
}

[Table("forms")]
public class Form
{
    [Column("id")]
    public int Id { get; set; }

    [Column("unemployed_id")]
    public int? UnemployedId { get; set; }

    [Column("completed")]
    public int? Completed { get; set; }
}

[Table("jobs")]
public class Job
{
    [Column("id")]
    public int Id { get; set; }

    [Column("company_id")]
    public int? CompanyId { get; set; }

    [Column("user_id")]
    public int? UserId { get; set; }

    [Column("unemployed_id")]
    public int? UnemployedId { get; set; }

    [Column("date")]
    public DateTime? Date { get; set; }

    [Column("position")]
    public string? Position { get; set; }
}

[Table("meetings")]
public class Meeting
{
    [Column("id")]
    public int Id { get; set; }

    [Column("user_id")]
    public int? UserId { get; set; }

    [Column("unemployed_id")]
    public int? UnemployedId { get; set; }

    [Column("duration")]
    public int? Duration { get; set; }

    [Column("date")]
    public DateTime? Date { get; set; }

    [Column("complete")]
    public int? Complete { get; set; }
}

[Table("trainings")]
public class Training
{
    [Column("id")]
    public int Id { get; set; }

    [Column("unemployed_id")]
    public int? UnemployedId { get; set; }

    [Column("name")]
    public string? Name { get; set; }

    [Column("completed")]
    public string? Completed { get; set; }

    [Column("user_id")]
    public int? UserId { get; set; }

    [Column("description")]
    public string? Description { get; set; }
}
