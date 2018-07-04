using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day7
{
    class Piemeri

    // atskiriba starp for  te mes zinam cik reizes vajag atkartot ciklu, ja zinam sakuma vertibu un robezas vertiba
    //while  do...while  te izmanto kad nezin cik reizes mums jaatkarto cikls, parbaudam vai nav vienada ar 0 un 
    // ievadot 0 beidzas programma
    // while parbauda vai cikla vispar nav verts iet ieksa, cilveks jau sakuma atver programu un saprot ka kludies un uzraksta iziet
    // do...while ja ieiet cikla un parbauda 
    {
        public void Kamer()
        {
            //while do...while  nosacijums kas tiek parbaudit
            //saja vertibas jamaina paciem, jamaina ieksa cikla atskiriba no for cikla

            string ievade = "";
            int skaititajs = 1; // seit skaititajs noradits ka vienmer bus 0
            while(ievade!= "")
            {
                Console.WriteLine("Uzraksti kaut ko"); 
                ievade = Console.ReadLine();
                Console.WriteLine("Mes easm inetracija nr " + skaititajs);
                skaititajs++; // skaititajs= skaititajs+1
                Console.WriteLine("Vel esam cikla!");
            }
            Console.WriteLine("Jus izgajat no cikla!!!");

        }

        public void Darit()
        {
            string ievade = "";
            int skaititajs = 1;

            do
            {
                Console.WriteLine("Uzraksti kaut ko");
                ievade = Console.ReadLine();
                Console.WriteLine("Mes easm inetracija nr " + skaititajs);
                skaititajs++; // skaititajs= skaititajs+1
                Console.WriteLine("Vel esam cikla!");

                
            } while (ievade != "") ;
            Console.WriteLine("Jus izgajat no cikla!!!"); // do while mes ieejam vismaz 1 reizi,bet ja while cikla ir tuksa vertiba 
        }                                                 // tad nemaz neiet ieksaa
        
        
    }
      
}
