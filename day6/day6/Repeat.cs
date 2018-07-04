using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace day6
{
    class Repeat
    {
        public void Izvade()
        {
            Console.WriteLine("Ievadiet skaitli");
            string input = Console.ReadLine();
            int ievade = Convert.ToInt16(input);

            string mainigais = Sharp(ievade);   // lekcija ir ar output
            Console.WriteLine("Jusu skaitlia ir:" + mainigais);

        }
        private string Sharp(int a)
        {
            string result = ""; //result ir mainigais
            if (a > 5)
            {
                result = "##"; //mainiga vertiba
            }
            else
            {
                result = "#"; //mainiga vertiba
            }
            //TODO ja int a lielaks par 5, tad atgriezt ##, ja ne, tad #
            return result;//atgriez mainigo result, kuru maina
        }




    }
}
