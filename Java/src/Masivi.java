import java.util.Scanner;
public class Masivi {
	public static void main(String[] args) {
		//int i = 10;
		int[]ints = {100};   // masivos int raksturo ka ints
		//System.out.println("i:" + i); // lai pieklutu pie i vertibas
		System.out.println("ints[0]:"+ ints[0]);
		ints[0] = 200; // modifice citu vertibu, ja vajag
		System.out.println("ints[0]:"+ ints[0]); // masivs
		
		//int[] emptyInts = new int [100]; // visas vertibas saja masiva bus 0
		//System.out.println("emptyInts[5]:"+ emptyInts[5]);
		
		int[] emptyInts = new int [100]; // izveidojam tuksu masivu un izvadam nulles ara
		for (int i=0; i < 100; i++) {      // masivs pats par sevi nemodifice vertibas, ir funkcijas kas sortet vertibas
			System.out.println(emptyInts[i] + ",");
			
			// seit masivs ir no 0 lidz 99 elementam, ja vajag 100 elementus tad jaraksta 101
			// kludas pazinojums varbut del ta ka ir izgajis arpus nosauktas robezas
			// lai kludas nebutu vajag definet ka pildam lidz 99 ieskaitot, kaa ir 100 ta nepildam so kodu
			
		}
		
		String[] strings = { "aaa", "bbb"};
		System.out.println(strings);
		
	}
	
}
