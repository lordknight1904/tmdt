using System;
using System.Web.Services;
using System.Linq;
using System.Collections.Generic;
using System.Data.Odbc;
using System.Data.Linq;

namespace WebApplication1
{
    /// <summary>
    /// Summary description for ThanhToan
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line.
    // [System.Web.Script.Services.ScriptService]
    public class ThanhToan : System.Web.Services.WebService
    {
        
        private int sodu;
        private int soTien;

        private DataClasses1DataContext db = new DataClasses1DataContext();
        

        [WebMethod]
        public string HelloWorld()
        {
            return "Hello World";
        }

        public byte[] encryptData(string pass)
        {
            System.Security.Cryptography.MD5CryptoServiceProvider md5Hasher = new System.Security.Cryptography.MD5CryptoServiceProvider();
            byte[] hashedBytes;
            System.Text.UTF8Encoding encoder = new System.Text.UTF8Encoding();
            hashedBytes = md5Hasher.ComputeHash(encoder.GetBytes(pass));
            return hashedBytes;
        }
        [WebMethod]
        public string md5(string data)
        {
            return BitConverter.ToString(encryptData(data)).Replace("-", "").ToLower();
        }

        [WebMethod]
        public int thanhToan(int soTien, int soCSC, int soTK)
        {
            DataClasses1DataContext dataclass1 = new DataClasses1DataContext();
            dataclass1.sp_laySoTaiKhoan(soCSC, soTK);
            THONGTINKH tt = new THONGTINKH();
            tt = dataclass1.THONGTINKHs.FirstOrDefault(x => x.STK == soTK && x.CSC == soCSC);
            DataClasses1DataContext dataclass2 = new DataClasses1DataContext();
            dataclass2.sp_laySoTaiKhoan(soCSC, soTK);
            THONGTINKH tt1 = new THONGTINKH();
            tt1 = dataclass2.THONGTINKHs.FirstOrDefault(y => y.CSC == 123 && y.STK == 123456);
            if (tt.SODU > soTien)
            {
                tt.SODU = tt.SODU - soTien;
               
                tt1.SODU = tt1.SODU + soTien;

                dataclass1.SubmitChanges();
              
                dataclass2.SubmitChanges();
                // db.Log = new System.IO.StreamWriter(@"C:\wamp64\www\nongsancantho\linq.log") { AutoFlush = true };

                //db.SubmitChanges();
            } else
            {
                return -1;
            }
            return tt.SODU;
            
        }           
    }
}