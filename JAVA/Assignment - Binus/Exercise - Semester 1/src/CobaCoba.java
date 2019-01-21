import java.util.Arrays;

public class CobaCoba {
	public static void main(String[] args) {
		//int temp = solution(1041);
		//System.out.println(temp);
		
		int[] A = {4000000, 3, 9, 2000000, 7, 9, 7, 3};
		int temp2 = unpaired(A);
		System.out.println(temp2);
		
	}
	
	public static int solution(int A) {
        // write your code in Java SE 8

		String binary = Integer.toBinaryString(A);
		int maxGap = 0;
		int gap = 0;
		
		for(int i = 0; i < binary.length(); i++) {
			if(binary.charAt(i) == '1') {
				maxGap = (maxGap < gap ? gap : maxGap);
				gap = 0;
			}
			else gap++;
		}
		
		return maxGap;
		
    }
	
	public static int unpaired(int[] A) {
		int currentInt = 0;
		int similarity = 0;
		
		Arrays.sort(A);
		
		for(int i = 0; i < A.length; i++) {
			if(currentInt == 0) currentInt = A[i];
			else if(currentInt == A[i]) similarity++;
			else if(similarity == 0) return currentInt;
			else {
				similarity = 0;
				currentInt = A[i];
			}
		}
		
		return 0;
	}
}
