using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using BCrypt.Net;
using System.Data.SqlClient;
using System.Diagnostics;


namespace MyMazdaApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UserController : ControllerBase
    {
        MazdaManager mazdaManager = new MazdaManager();

        // GET api/User
        //Check user login password
        [HttpGet]
        public bool Get(string username, string password)
        {
            if (string.IsNullOrEmpty(username) || string.IsNullOrEmpty(password))
            {
                return false;
            }
            return mazdaManager.GetUserHash(username, password);
        }

        // POST api/User
        //Create user
        [HttpPost]
        public bool Post([FromBody] User user)
        {
            if (string.IsNullOrEmpty(user.Username) || string.IsNullOrEmpty(user.Password))
            {
                return false;
            }
            return mazdaManager.CreateUser(user);
        }

    }
}
