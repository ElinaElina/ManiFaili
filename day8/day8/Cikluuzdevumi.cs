using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day8
{
    class Cikluuzdevumi
    {
        public void Zvaigznite()
        {
            // cik reizes iet cauri cilveks ar Console.Readline
            // cik cilveks ievada skaitli tik lai izvadas zvaigznites un lai radas egliitee
            //parbaudam kluda un izvadam kludas pazinojumu ja ievaditais skitlis ir 0 vai negativs, ciklu var izmantot jebkuru no 3jiem

            Console.WriteLine("Ievadi skaitli");
            string input = Console.ReadLine();
            int robeza = Convert.ToInt16(input);

            string zvaigznite = "";

            for (int i = 0; i < robeza; i++)
            {
                zvaigznite = zvaigznite + "*";
                Console.WriteLine(zvaigznite); // sadi zvaigznite izvadas eglite, cikla neko neparbauda

            }
            Console.ReadLine();

            if (robeza <= 0)
            {
                Console.WriteLine("Kludaina ievade");
            }
            else
            {
                for (int i = 0; i < robeza; i++)
                {
                    zvaigznite = zvaigznite + "*";
                    Console.WriteLine(zvaigznite);
                }
            }
            int skaititajs = 0;
            zvaigznite = "";
            while (skaititajs != robeza)
            {
                zvaigznite = zvaigznite + "*";
                Console.WriteLine(zvaigznite);
                skaititajs++;     // NEAIZMIRST !!!!nedrikst so aizmirst jo citaadi ciklaa ies ieksaa muziigi, so parasti, lietojot while, aizmirst!!!!
            }

        }

    }
}
