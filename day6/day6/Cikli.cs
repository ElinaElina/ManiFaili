using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day6
{
    class Cikli
    {
        public void Piemers()
        {

                                             // ciklu veidi ir for, while,do...while
            for (int i = 0; i < 6; i++)     // i norada no cik saksies skaitlis un programmesana ta parasti ir nulle
                                            // i<6 norada ka lidz 5 ta skaitis
                                            // i++ sadi pieskaita plus 1
            {
                Console.WriteLine("Elina");
                if (i == 3)
                {
                    Console.WriteLine("ir 3!!!");
                }
            } 
            for(int skaititajs = 7; skaititajs > 0; skaititajs--) //ja skaitam uz otru pusi tad salidzinasanai vajag uz otru pusi
            {
                Console.WriteLine("Skaititajs uz otru pusi");
            }

            Console.WriteLine("Ievadi skaitli:");
            string input = Console.ReadLine();
            int robeza = Convert.ToInt16(input);

            int a = 0; // deklrare arpus cikla lai katru reizi nerakstitu un butu tapati vertiba
                       // jo nav no kurienes nemt vertibu pirma reize, tadel japasaka cik ir

            for(int i = 0; i < robeza; i++) // robeza no input ir tas skaitlis ko ievada, vertiba ka mainigais
            {
                a = i;                  // taa lai jauna funkcijaa arii stradaatu
                Console.WriteLine(a); // i jo ta ir ta skaitliska vertiba
            }
        } 
        public void Faktorialis()
        {
            Console.WriteLine("Ievadi skaitli: 4");
            string input = Console.ReadLine();
            int robeza = Convert.ToInt16(input);
            //ja cilveks ievada 4, tad jaizvadas 10 (1+2+3+4)

            int summa = 0;  // vajag kur to vertibu glabat, tadel taisa jaunu mainigo
            for (int i = 1; i<=robeza; i++)          //otrs variants ka i<robeza+1
            {
                summa = summa + i;
                
            }
            Console.WriteLine("Faktorialis ir" + summa);

        }
        public void Reste()
        {
            Console.WriteLine("Ievadi skaitli");
            string input = Console.ReadLine();
            int robeza = Convert.ToInt16(input);
            
            //string vpr = "ss" + "pp"; stringus var kombinet
            // Console arpus cikla, tik restites cik cilveks ievada skaitli

            string restite = "" ;
            for (int i=0; i<robeza+1; i++)  // svarigi tikai ka iet uz prieksu 
            {
                restite = restite + "#";
            }

            Console.WriteLine(restite);
        }

    }
}
