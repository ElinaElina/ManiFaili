using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day1
{
    class Program
    {
        static void Main(string[] args)
        {
            /*int vesels = 4; //vesels slaitlis, te var ievadit datumu ari ja grib ar to kaut ko darit
            Console.WriteLine(vesels);
            vesels = 5;
            Console.WriteLine(vesels);
            /*vairaku
             * rindinu 
             * komentars un to dalu nerada palaizot programmu */

            /*double komats = 5.6; //skaitlis ar komatu komata vieta varbut plus zime
            char simbols = '7'; //simbols jebkads, skaitlis
            string virkne = "\"Labdien!\""; //burtu salikums, vards -abc-, ja neizmanto komandu date, tad var izmantot te ievadit datumu
            virkne = virkne + simbols; // sadi darit var, ja es nonemu plus simbols tad man tas 7 neradisies palaizot progr
            Console.WriteLine(virkne);*/
            


           /* Console.WriteLine("Ludzu ievadiet kaut ko: ");
            string virkne2 = Console.ReadLine();
            string simboli = Convert.ToInt16(virkne2);

            int rezultats1 = Convert.ToInt16(virkne2); 
            //ta vienkarsi jaunu vertibu pieskirt nevar, skaitlis norada kada intervala var ieklauties
            //control+F meklet. mums jau eksiste tads viens rezultats vai nu aizkomente vai noamaina nosaukumu
            Console.WriteLine(rezultats1); //te pasaka ka tas ir skaitlis nevis burti, un kad pasaka lai pasaka kaut ko, tad vajag skaitlus likt nevis burtus
            Console.WriteLine(simboli); //so vajag tad pie ludzu uzrakstiet kaut ko atpazis ari burtus ne tikai ciparus
        
            rezultats1 = rezultats1 + 6; */

            Console.WriteLine("Ka jus sauc?");
            string ievade = Console.ReadLine(); // out put ko funkcija atgriež

            Console.WriteLine("Kurs gads tagad ?");
            string gads = Console.ReadLine(); // nevar likt to pasu mainiga nosaukumu Ievade, jo nosauk jabut unikanalam
                                                   // bet ja rakstitu string ievade = un pieskirtu te vertibu tad ieprieksejais ko uzrakstitu pazustu
                                                   // tadel dod jaunu nosaukumu
            int skaitlisgads = Convert.ToInt16(gads);      // converte lai var atnemt pec tam
            
            Console.WriteLine("Kura gada esat dzimis?");
            gads = Console.ReadLine();
            int skaitlisGadsDzimsanas = Convert.ToInt16(gads);
            int rezultats = skaitlisgads - skaitlisGadsDzimsanas;

            Console.WriteLine("Sveiki," + ievade + ",jums ir" + rezultats + "gadi!");
            Console.ReadLine();

            /*string simboli = Convert.ToInt16(virkne3);
            int rezultats = Convert.ToInt16(virkne3);
            Console.ReadLine(virkne3);*/

           





        }
    }
}
