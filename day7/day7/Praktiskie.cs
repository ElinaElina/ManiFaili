using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day7
{
    class Praktiskie
    {
        public void Pirmais()

        {
            //Izvadit summu skaitlu reizinajumam * 2 (skaitli no 1-9)

            //t.i. (1*2) + (2*2) + (3*2) +...

            Console.WriteLine("Izvelies 1 vai 2:");
            string input = Console.ReadLine();


            int summa = 0;
            for (int i = 1; i < 10; i++)
            {
                int reiz = i * 2;
                Console.WriteLine("Debug1" + reiz);
                summa = summa + reiz;

                Console.WriteLine("Debug2" + summa);
            }
            Console.WriteLine("Izvades summa ir" + summa);
        }

        public void Otrais()

        {
            //Likt cilvekam meginat uzminet skaitli. Ja skaitlis sakrit ar 11, tad pareizi

            //Max meginajumu skaits - 5.

            //Ja 5 reizes nesanak, tad izvadit pazinojumu. 

            for (int i = 0; i < 5; i++)   // tas i ir cikls 1 un ++ ka atkarto plus vienu reizi un lielaks mazaks lidz cik cikls atkartosies
            {
                int reizes = 5 - i;
                Console.WriteLine("Ievadiet minejumu");
                Console.WriteLine("Palikusi" + " " + reizes + " " + "meginajumi");
                string input = Console.ReadLine();
                /* int skaitlis = Convert.ToInt16(input); // so it ka nevajag seit jo nekas nav matematiski jaskaita, jareizina,bet nu lai paliek
                 */

                if (input == "11")
                {

                    Console.WriteLine("Pareizi");
                    break;                         // izmanto lai izietu no programmas, jo izpildits

                }
                else
                {

                    Console.WriteLine("Nepareizi");
                    if (i == 4)
                    {
                        Console.WriteLine("Esat sasniedzis ievades maximumu");
                    }

                }

            }

        }
        public void Tresais()
        {
            //Izvadit summu skaitlu reizinajumam * 2 (skaitli no 1-9)

            //t.i. (1*2) + (2*2) + (3*2) +...


            string ievade = "5";
            int summa = 0;
            int skaititajs = 1;
            while (skaititajs < 9)      //te ir tas reizes cik cikls atkartojas var ari skaititajs !=10 jo 9 pedejais sk ko izmanto
            {
                Console.WriteLine("Uzraksti skaitli");
                int reiz = skaititajs * 2;
                summa = summa + reiz;
                ievade = Console.ReadLine();
                Console.WriteLine("Jus meginajat tagad" + " " + skaititajs + "reizes" + " " + "meginat var 5 reizes ");
                skaititajs++; // skaititajs= skaititajs+1 // te varbut ar jebko ar string int double parbaudit jebkuru vertibu
                Console.WriteLine("Vel esam cikla!");
            }
            Console.WriteLine("Jus izgajat no cikla!!!");
        }
        public void Ceturtais()
        {
            int skaititajs = 0;

            do
            {
                Console.WriteLine("Uzminiet skaitli");
                string input = Console.ReadLine();
                int skaitlis = Convert.ToInt16(input);

                if (skaitlis == 11)
                {
                    Console.WriteLine("Pareizi");
                    break;
                }
                else
                {
                    if (skaititajs == 4)
                    {
                        Console.WriteLine("Meginajuma reizes beigusas");
                    }
                    else
                    {
                        Console.WriteLine("Megini velreiz!");
                    }

                }
                skaititajs++;
            } while (skaititajs != 5);
        }
    }
   
}

