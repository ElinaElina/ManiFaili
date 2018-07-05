using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
             NeatgriezVertibu();
             NeatgriezVertibu();
             ArParametriem(3, 6);
             ArParametriem(1, 2);
             ArParametriem(9, -99);



             int atbilde = ArReturn(4, 9);

             Console.WriteLine(atbilde);
            int skaitlis = Rakstitskaili();
            Console.WriteLine(skaitlis);
            Console.ReadLine();

            int cipars1 = Matematika(10, 7);
            Console.WriteLine(cipars1);
            Console.ReadLine();

        }

        static void NeatgriezVertibu()
        {
            Console.WriteLine("1.funkcija");
            Console.WriteLine("Bez input un output");
        }

        static void ArParametriem(int a, int b)
        {
            int result = a + b;
            Console.WriteLine(result);
        }

        static int ArReturn(int a, int b)
        {
            int result = a + b;
            return result;


        }

        static int Rakstitskaili()

        {
            Console.WriteLine("Uzraksti skaili");

            string nosaukums = Console.ReadLine();
            int skaitlis = Convert.ToInt16(nosaukums);
            return skaitlis;
        }  

        static int Matematika(int c, int d)
        {
           

            int cipars = c - d;
            return cipars;


        }

     



        
    }
}
