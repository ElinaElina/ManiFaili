
public class diena3Cikli {
	public static void main(String[] args) {
        //katra cikla ir i ,bet katra tas i ir atseviski mainigais
		
		// basic for loop with increment by 1
		System.out.println("basic for loop with increment by 1"); // te skaita no 0,0 lidz 9
		for (int i = 0; i < 10; i++) { // prints 1-10 
			double d = i / (double) 10;
			System.out.println("i: " + i + " d: " + d);
		}

		String[] strings = { "abc", "def", "efg" };
		// prints values from array using i as index // so izmanto masivos
		System.out.println("prints values from array using i as index");
		for (int i = 0; i < strings.length; i++) {
			System.out.println("" + "i: " + i + "i" + strings[i]);
		}

		// prints values from array without using index
		System.out.println("prints values from array without using index");
		for (String s : strings) {
			System.out.println(s);
		}

		// for loop with increment of 1 but skips code if i is even number
		// dala nepara skaitlus
		System.out.println("for loop with increment of 1 but skips code if i is even number");
		for (int oddI = 0; oddI < 10; oddI++) {
			if (oddI % 2 == 0) { // checks if iddI can be divided without reminder
				continue; // jumps right back to start of loop
				          // continue ieiet velreiz cikla
			}

			System.out.println("oddI: " + oddI);

		}
         //sis ir veids ka uzrakstit bezgaligu ciklu, kad vajag parbaudit kaut ko pkirs iet cikla
		// infinite loop broken by using break in case of c reaching zero or below
		System.out.println("for loop with increment of 1 but skips code if i is even number");
		int c = 10;
		for (;;) { // prints 10-1

			System.out.println("c: " + c);

			c = c - 1;
			if (c <= 0) {
				break; // exits the loop and jumps to the code after loop
				       // break atskiriba ,ka partrauc darbibu ja izdara nepareizi un sak no gala
				   // bet continue turpina, skatit augstak
			}
			
			// muzigais While cikls, kad pasaka konkretu iznakumu tad cikls pildisies tik ilgi kamer tiks 
			// kamer izpildisies noteikums, tiks uzrakstits nosauktais rezultats
			// int z=0;
			// while(true){
			//System.out.println("true");
			//z++;
			//z==10;
			//break;}
			
			
			
		}
		

		// prints integers from -9 to 9 jumping from middle i.e 1, -1, 2, -2, 3, -3 etc
		System.out.println("prints integers from -9 to 9 jumping from middle i.e 1, -1, 2, -2, 3, -3 etc");
		int jumpFactor = 1; // jump 1 position// sakums no kurienes bus leciens
		for (int jumpingInt = 1; jumpingInt < 10 && jumpingInt > -10; jumpingInt = jumpingInt + jumpFactor) {
			System.out.println("jumpFactor: " + jumpFactor + ", jumpingInt: " + jumpingInt);
			// update jumpFactor
			jumpFactor = jumpFactor > 0 ? -jumpFactor - 1 : -jumpFactor + 1;
		}

	}

}


