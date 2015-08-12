package DemoAbstract;

class PersegiPanjang extends Bentuk
{
	private int panjang;
	private int lebar;
	
	PersegiPanjang(int p, int l){
		panjang = p;
		lebar = l;
	}
	
	public int luas(){
		System.out.println("Pada Persegi Panjang : ");
		return(panjang*lebar); 
	}
}