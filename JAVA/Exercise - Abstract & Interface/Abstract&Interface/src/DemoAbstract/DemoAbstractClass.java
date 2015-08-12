package DemoAbstract;

class DemoAbstractClass
{
	public static void main(String[] args)
	{
		Bentuk obj; //abstract class tdk bisa di instansiasi
		
		PersegiPanjang pp = new PersegiPanjang(5, 3);
		BujurSangkar bs = new BujurSangkar(6);
		
		obj = pp;
		System.out.println("Luas Persegi Panjang : "+obj.luas());
		
		obj = bs;
		System.out.println("Luas Bujur Sangkar : "+obj.luas());
	}
}
