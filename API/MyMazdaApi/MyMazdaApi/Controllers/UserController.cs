using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using BCrypt.Net;
using System.Data.SqlClient;
using System.Diagnostics;

// For more information on enabling Web API for empty projects, visit https://go.microsoft.com/fwlink/?LinkID=397860

namespace MyMazdaApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UserController : ControllerBase
    {
        SqlConnection con = new SqlConnection(constants.connectionString);

        // GET api/<UserController>
        [HttpGet]
        public bool Get(string username, string password)
        {
            SqlCommand cmd = new SqlCommand("exec GetUserHash @username", con);

            cmd.Parameters.Add(new SqlParameter("username", username));

            con.Open();

            try
            {
                string hash = cmd.ExecuteScalar().ToString();

                con.Close();

                if (BCrypt.Net.BCrypt.Verify(password, hash))
                {
                    return true;
                }
            }
            catch (System.Exception e)
            {
                Debug.WriteLine(e.Message);
            }


            return false;
        }

        // POST api/<UserController>
        [HttpPost]
        public void Post([FromBody] User user)
        {
            //Hash password
            string hashedPassword = BCrypt.Net.BCrypt.HashPassword(user.Password);

            SqlCommand cmd = new SqlCommand("exec CreateUser @username, @password", con);

            cmd.Parameters.Add(new SqlParameter("username", user.Username));
            cmd.Parameters.Add(new SqlParameter("password", hashedPassword));

            con.Open();

            cmd.ExecuteNonQuery();

            con.Close();
        }

    }
}
