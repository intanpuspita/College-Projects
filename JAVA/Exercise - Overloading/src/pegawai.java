
class pegawai {
	private String nip;
	private String nama;
	private int umur;
	
	//constructor namanya sama kayak nama class
	//dipanggil saat pembentukan objek (new)
	public pegawai(){
		this.nip="99001";
		this.nama="Ali";
		this.umur=23;
	}
	
	public void display(){
		System.out.println("NIP = "+this.nip);
		System.out.println("Nama = "+this.nama);
		System.out.println("Umur = "+this.umur);
	}
	
	public static void main(String[] args){
		pegawai pgw = new pegawai();
		pgw.display();
	}
}
