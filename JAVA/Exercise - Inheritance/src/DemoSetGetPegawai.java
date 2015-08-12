
class pegawai {
	protected String nip;
	protected String nama;
	
	public void setNip(String vnip){
		nip = vnip;
	}
	
	public void setNama(String vnama){
		nama = vnama;
	}
	
	public String getNip(){
		return nip;
	}
	
	public String getNama(){
		return nama;
	}
	
	public void display(){
		System.out.println("NIP = "+nip);
		System.out.println("Nama = "+nama);
	}
}

public class DemoSetGetPegawai {
	public static void main(String[] args){
		pegawai pgw = new pegawai();
		pgw.setNip("12345");
		pgw.setNama("Intan");
		pgw.display();
	}
}
