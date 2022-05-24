namespace MyMazdaApi
{
    public class MazdaManager
    {
        //Data access layer
        Dal dal;
        //Constructor
        public MazdaManager()
        {
            dal = new Dal();
        }



        public bool GetUserHash(string username, string password)
        {
            return dal.GetUserHash(username, password);
        }


        public bool CreateUser(User user)
        {
            return dal.CreateUser(user);
        }

        public Car GetUserCar(string username)
        {
            return dal.GetUserCar(username);
        }
    }
}
