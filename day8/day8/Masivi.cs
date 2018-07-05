using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day8
{
    class Masivi
    {
        public void IzvaditMasivu()
        {
            int[] piemeraMasivs = new int[5];              //jauztaisa objekts, skaitlis iekavas - cik masiva var glabaties vertibas, solu skaits

            piemeraMasivs[0] = 4;                         // pieskirt vertibu, iekavas norada ,kuram solim pieklut grib, masiviem ir pirmais elements 0, obligati pirmais elements ir 0
            piemeraMasivs[1] = 99;
            piemeraMasivs[2] = 9;
            piemeraMasivs[3] = 6567;
            piemeraMasivs[4] = 567;                      // jo pieci soli ,ko noradija sakuma int iekavas
            Console.WriteLine(piemeraMasivs[0]);        // iekavas raksta to kuru izvadit, ja liks 3 tad izvadisies 6567

            for (int i = 0; i < 5; i++)                // visertaks izsaukt ar ciklu
            {
                Console.WriteLine(piemeraMasivs[i]);   // masivi ir ertakais kaa glabat datus un kaa pieklut katram elementam
            }

            string[] stringMasivs = new string[5];

            /*stringMasivs[0] = "*";
            stringMasivs[1] = "**";
            stringMasivs[2] = "***";
            stringMasivs[3] = "****";
            stringMasivs[4] = "*****";*/

            





            for (int i = 0; i < 5; i++)
            {
                Console.WriteLine(piemeraMasivs[i]);
            }

            string abs = stringMasivs[3];    // masivs ar elemntu 3
            string summa = "";
            for(int i = 0; i < 5; i++)
            {
                summa = summa + "*";
                stringMasivs[1] = summa;

            }
            stringMasivs[1] = summa;
            for(int i=0; i < 5; i++)
            {
                Console.WriteLine(piemeraMasivs[i]);
            }
            for(int i=4; i >= 0; i--)
            {
                Console.WriteLine(piemeraMasivs[i]);
            }
            for(int i = 0; i <= 0; i++)
            {
                
                Console.WriteLine(piemeraMasivs[i]);
            }
        }   


    }
}
