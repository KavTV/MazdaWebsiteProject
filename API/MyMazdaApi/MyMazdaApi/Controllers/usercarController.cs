using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Data.SqlClient;

namespace MyMazdaApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class usercarController : ControllerBase
    {

        [HttpGet]
        public Car Get(string username)
        {
            if (username == null)
            {
                return null;
            }
            SqlConnection con = new SqlConnection(constants.connectionString);


            SqlCommand cmd = new SqlCommand("exec GetUserCar @username", con);

            cmd.Parameters.Add(new SqlParameter("username", username));

            con.Open();

            SqlDataReader reader = cmd.ExecuteReader();

            Car car = new Car();

            while (reader.Read())
            {
                car.Model = reader.GetString(0);
                car.kmDriven = reader.GetInt32(1);
                car.kmLeft = reader.GetInt32(2);
                car.username = reader.GetString(3);
            }

            con.Close();

            return car;
        }
    }
}
