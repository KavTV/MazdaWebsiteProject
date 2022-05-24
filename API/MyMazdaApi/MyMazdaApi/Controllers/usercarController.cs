using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Data.SqlClient;

namespace MyMazdaApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UserCarController : ControllerBase
    {
        MazdaManager mazdaManager = new MazdaManager();

        [HttpGet]
        public Car Get(string username)
        {
            if (username == null)
            {
                return null;
            }

           return mazdaManager.GetUserCar(username);
        }
    }
}
