using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day6
{
    class Program
    {
        static void Main(string[] args)
        {
            Repeat objekts = new Repeat();
            objekts.Izvade();
            Console.ReadLine();

            Cikli objekts1 = new Cikli();
            objekts1.Piemers();
            Console.ReadLine();

            Cikli objekts2 = new Cikli();
            objekts2.Faktorialis();
            Console.ReadLine();

            Cikli objekts3 = new Cikli();
            objekts3.Reste();
            Console.ReadLine();


        }
    }
}
