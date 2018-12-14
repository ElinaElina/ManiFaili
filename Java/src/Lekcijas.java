import java.util.Scanner;
public class Lekcijas {
	
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
	System.out.print("Enter i:");
	int i = sc.nextInt();
	sc.close();
	
	
		//descrement by 1
	int i =10;
	while (i>0) {
		System.out.println("i:" + i);
		i--;
		
	}
	// descrement by 10
	
	int j= 0;
	while(j<100) {
		System.out.println("j:" + j);
		j= j+10;
	}
	
	// ar do ...while
	
	int i =10;
	do {
		System.out.println("i:" + i); //
		i--;
		
	} while (i>0);
	
	// descrement by 10
	
	int j= 0;
	do {
		System.out.println("j:" + j);
		j=j+100;
	
 } while (j<100);
	
	
	// ja gribam lai lietotajs ievada 100 un skaitit atpakal
	// sadi neder, vajag, lai parlec pari
	
	// do {
		//System.out.println("i:" + i);
		//i++;
	// }while (i>10);
		
	do {
		System.out.println("i:" + i);
		i++;
	   }while (i !=100); // tad rakstam ! zimi , tas apstadina ciklu
	
	// do cikli nav populari, popularaki ir for cikli
		
 }
}	














