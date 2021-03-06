using System.Data.SqlClient;
using System.Diagnostics;

namespace MyMazdaApi
{
    public class Dal
    {
        SqlConnection con = new SqlConnection(Constants.connectionString);



        public bool GetUserHash(string username, string password)
        {
            //Use the stored procedure to get the hash of a specific user
            SqlCommand cmd = new SqlCommand("exec GetUserHash @username", con);

            cmd.Parameters.Add(new SqlParameter("username", username));


            try
            {
                con.Open();
                //Result should only contain 1 row
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


        public bool CreateUser(User user)
        {
            try
            {
                //Hash password
                string hashedPassword = BCrypt.Net.BCrypt.HashPassword(user.Password);

                SqlCommand cmd = new SqlCommand("exec CreateUser @username, @password", con);

                //Use parameters so avoid SQL-Injection
                cmd.Parameters.Add(new SqlParameter("username", user.Username));
                cmd.Parameters.Add(new SqlParameter("password", hashedPassword));

                con.Open();

                //Execute, but dont receive anything because it does not return anything
                cmd.ExecuteNonQuery();

                con.Close();
                //If everything went through, it was successful
                return true;
            }
            catch (System.Exception)
            {
                //Return false to tell the user that we did not create a new user
                return false;
            }
        }

        public Car GetUserCar(string username)
        {
            //Cannot get a usercar if username is empty
            if (string.IsNullOrWhiteSpace(username))
            {
                return null;
            }

            SqlCommand cmd = new SqlCommand("exec GetUserCar @username", con);

            cmd.Parameters.Add(new SqlParameter("username", username));

            con.Open();

            SqlDataReader reader = cmd.ExecuteReader();

            Car car = new Car();

            while (reader.Read())
            {
                //Get the information based on what column it is received
                //Right now this will loop through all cars, but take the last one,
                //since there is no support to show multiple cars
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
