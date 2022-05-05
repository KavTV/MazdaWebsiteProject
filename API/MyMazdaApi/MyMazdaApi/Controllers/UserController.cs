using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using BCrypt.Net;
using System.Data.SqlClient;

// For more information on enabling Web API for empty projects, visit https://go.microsoft.com/fwlink/?LinkID=397860

namespace MyMazdaApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UserController : ControllerBase
    {
        // GET: api/<UserController>
        [HttpGet]
        public IEnumerable<string> Get()
        {
            return new string[] { "value1", "value2" };
        }

        


        // GET api/<UserController>/5
        [HttpGet("{id}")]
        public string Get(int id)
        {
            return "value";
        }

        // POST api/<UserController>
        [HttpPost]
        public void Post([FromBody] string username, string password)
        {
            //Hash password
            string hashedPassword = BCrypt.Net.BCrypt.HashPassword(password);

            SqlConnection con = new SqlConnection(constants.connectionString);
            

            SqlCommand cmd = new SqlCommand("",con);

            cmd.Parameters.Add(new SqlParameter("_username", username));
            cmd.Parameters.Add(new SqlParameter("_password", hashedPassword));

            con.Open();

            cmd.ExecuteNonQuery();

            con.Close();
        }

        // PUT api/<UserController>/5
        [HttpPut("{id}")]
        public void Put(int id, [FromBody] string value)
        {
        }

        // DELETE api/<UserController>/5
        [HttpDelete("{id}")]
        public void Delete(int id)
        {
        }
    }
}
