using System.ComponentModel.DataAnnotations;

namespace AgendaContactos.Models
{
public class Contacto
{
public int Id { get; set; }

    [Required(ErrorMessage = "El nombre es obligatorio")]
    public string Nombre { get; set; }

    [EmailAddress(ErrorMessage = "Correo inválido")]
    [Required(ErrorMessage = "El correo es obligatorio")]
    public string Correo { get; set; }

    [Phone(ErrorMessage = "Número inválido")]
    [Required(ErrorMessage = "El teléfono es obligatorio")]
    public string Telefono { get; set; }

    public string Descripcion { get; set; }
}
}