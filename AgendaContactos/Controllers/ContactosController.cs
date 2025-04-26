using Microsoft.AspNetCore.Mvc;
using AgendaContactos.Models;
using System.Linq;

namespace AgendaContactos.Controllers
{
    public class ContactosController : Controller
    {
        private static List<Contacto> contactos = new List<Contacto>();
        private static int nextId = 1;

        // Acción para listar los contactos
        public IActionResult Index() => View(contactos);

        // Acción para mostrar el formulario de creación
        public IActionResult Create() => View();

        // Acción para manejar la creación de un contacto
        [HttpPost]
        public IActionResult Create(Contacto contacto)
        {
            if (ModelState.IsValid)
            {
                contacto.Id = nextId++;
                contactos.Add(contacto);
                return RedirectToAction("Index");
            }
            return View(contacto);
        }

        // Acción para mostrar el formulario de edición
        public IActionResult Edit(int id)
        {
            var contacto = contactos.FirstOrDefault(c => c.Id == id);
            return View(contacto);
        }

        // Acción para manejar la edición de un contacto
        [HttpPost]
        public IActionResult Edit(Contacto contacto)
        {
            if (ModelState.IsValid)
            {
                var existente = contactos.FirstOrDefault(c => c.Id == contacto.Id);
                if (existente != null)
                {
                    existente.Nombre = contacto.Nombre;
                    existente.Correo = contacto.Correo;
                    existente.Telefono = contacto.Telefono;
                    existente.Descripcion = contacto.Descripcion;
                }
                return RedirectToAction("Index");
            }
            return View(contacto);
        }

        // Acción para eliminar un contacto
        public IActionResult Delete(int id)
        {
            var contacto = contactos.FirstOrDefault(c => c.Id == id);
            if (contacto != null)
                contactos.Remove(contacto);

            return RedirectToAction("Index");
        }
    }
}