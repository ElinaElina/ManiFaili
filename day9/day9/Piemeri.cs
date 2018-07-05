using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day9
{
    class Piemeri
    {
        public void Klase()
        {
            //12 vietas, japajauta tuksa vai aiznemta, ja tuksa tad 0, masivs aizpildits, sakumaa visas vietas aizpilditas 
            //Console.ReadLine(); ievada cilveks
            // bet tad nemaz neparada tuksas vietas
            // string[] masivs= string[12];
            //vai cilveka vards vai 0
            // Izvadit masivu
            // Izvadit tikai aiznemtass vitas ar cilveka vardu un neparadit 0


            /* string[] galdi = new string[12];
             int robeza = galdi.Length; // arii taa var izvadit 

             Console.WriteLine(robeza);

             for (int i = 0; i < 12; i++)
             {

                 Console.WriteLine("Ievadiet vardu vai (0) ja galds tukss");
                 galdi[i] = Console.ReadLine();

             }*/

            string[] galdi = new string[12];
            int robeza = galdi.Length; // arii taa var izvadit 

            Console.WriteLine(robeza);

            for (int i = 0; i < 12; i++)
            {

                if (galdi[i] !="0")
                {
                    Console.WriteLine("Pie galda sez" + galdi[i]);
                }
                else
                {
                    Console.WriteLine("galds ir tukss");
                }
                if (i == robeza)    // un te cikls beigsies
                {
                }
            }
        }
    }   
}
