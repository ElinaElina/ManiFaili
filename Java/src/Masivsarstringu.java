import java.util.Scanner;
public class Masivsarstringu {
	public static void main(String[] args) {
		
		String[] strings = { "aaa", "bbb"};
		
		for(String s :strings ) {   //te nodifinet lokalo stringu s, nav redzams arpuse
		System.out.println(s + ",");// šī ir īsā sintakse, otra garā, katari savas priekšrocības
		}
		// iso raksta, ja nevajag index
		
		for(int i= 0; i < strings.length;i++) {
			String s = strings[i];
			System.out.println(s + ",");
			//System.out.println("i : " + i + ",," + s + ","); gara sintakse
			
			//vēl variants
			//int j = 0;
			//for(String s :strings ) {
				//System.out.println( "j : " + j + ",," + s + ",");
				//j++;
			}
			
			// ja kaut ko ievada leitotajs no concoles, ta var sadalit vardus , uzvardus, pec komata utt
			
			String input = "a, t, y, u, i, o, oo, yy, wwwq,";
			String[] chars = input.split(","); // atstarpes paliks, vai nu ar trim() vai atstat
			for(String s :chars ) {
				System.out.println("part: " + s.trim() + "'");	       // ar komatiem stradas, bet citur uzmanigi
				// tas simbols pec kura splito tiek pazaudets, lai saglabatu ir spec darbibas 
				// lai izvaditu uz ekrana to kas interese
				
				// ja ir space ,bet nav komata
				// vispirms interese saskaitit ko cilveks ir ievadijis vardu tikai vai vardu un uzvardu uttt
				String input1 = "   elina uzvards1     uzvards2  "; 
				String[] chars1 = input1.split(" ");
				int parts = 0;
				for(String s1 :chars1 ) {
					if(s1.length() != 0) {
						parts++;
						System.out.println("parts: '" + s1 + "'");	
					}
				}
				System.out.println("parts: " + parts);// nosaka cik dalas ir stringam, izvada ir 3
				// masivs ir stringa definets ka 3 dalas un nevar ta vnk pateikt ka masivs tagad bus 100 dalas
				//strings nemaina vertibu, masivs nemaina izmeru
				
				// int[] arr1 = new int[]{1,2,3};
				//int[] arr2 = new int[3];
				// System.arraycopy(arr1-pasakam ko gribam kopet, 0- pasakam ka no nullta,arr2,pasaka
				// uz kuru kopes 0,3 iekope saja);
				
				String input2 = "    elina  ";
				String[] chars2 = input2.split(" ");
				int parts2 = 0;
				
				String[] target = new String[1];
				for(String s1 :chars1 ) {
					if(s1.length() != 0) {
						parts++;
						target[0] = s1;
						System.out.println("parts: '" + s1 + "'");
				
			}
			
		}
				for (String t : target) {
					System.out.println("t: '" + t + "'");		
	}			
  }
 }
}