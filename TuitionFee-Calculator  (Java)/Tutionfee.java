import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Tutionfee {

	private JFrame frame;
	private JTextField textField1;
	private JTextField textField2;
	private JTextField textField3;
	private JTextField textField4;
	private JTextField textField5;
	private JTextField textField6;
	private JLabel lblCopyright;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Tutionfee window = new Tutionfee();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public Tutionfee() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame("TutionFee Calculator");
		frame.setBounds(100, 100, 709, 478);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Primeasia University Tution Fee Calculator");
		lblNewLabel.setFont(new Font("Yu Gothic", Font.BOLD, 20));
		lblNewLabel.setBounds(114, 11, 453, 43);
		frame.getContentPane().add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("Enter Credits ");
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblNewLabel_1.setBounds(161, 59, 125, 43);
		frame.getContentPane().add(lblNewLabel_1);
		
		textField1 = new JTextField();
		textField1.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField1.setBounds(349, 65, 93, 34);
		frame.getContentPane().add(textField1);
		textField1.setColumns(10);
		
		JLabel lblFeesPerCreditl = new JLabel("Fees Per Credit");
		lblFeesPerCreditl.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblFeesPerCreditl.setBounds(161, 113, 169, 34);
		frame.getContentPane().add(lblFeesPerCreditl);
		
		textField2 = new JTextField();
		textField2.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField2.setColumns(10);
		textField2.setBounds(349, 115, 93, 34);
		frame.getContentPane().add(textField2);
		
		JLabel lblLabFee = new JLabel("Lab Fee ");
		lblLabFee.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblLabFee.setBounds(161, 158, 169, 34);
		frame.getContentPane().add(lblLabFee);
		
		textField3 = new JTextField();
		textField3.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField3.setColumns(10);
		textField3.setBounds(349, 160, 93, 34);
		frame.getContentPane().add(textField3);
		
		JLabel lblOtherFee = new JLabel("Other Fee");
		lblOtherFee.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblOtherFee.setBounds(161, 203, 169, 34);
		frame.getContentPane().add(lblOtherFee);
		
		textField4 = new JTextField();
		textField4.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField4.setColumns(10);
		textField4.setBounds(349, 203, 93, 34);
		frame.getContentPane().add(textField4);
		
		JLabel lblEnterWaiver = new JLabel("Enter Waiver");
		lblEnterWaiver.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblEnterWaiver.setBounds(161, 248, 169, 34);
		frame.getContentPane().add(lblEnterWaiver);
		
		textField5 = new JTextField();
		textField5.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField5.setColumns(10);
		textField5.setBounds(349, 248, 93, 34);
		frame.getContentPane().add(textField5);
		
		JButton btnNewButton = new JButton("Calculate");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				
				
				
				
				
				 double a,b,c,d,e,f,g,h,i,j;
				
				try {
					a=Double.parseDouble(textField1. getText());
					b=Double.parseDouble(textField2. getText());
					c=Double.parseDouble(textField3. getText());
					d=Double.parseDouble(textField4. getText());
					e=Double.parseDouble(textField5. getText());
					
					
					
					   f = e/100;
					   g = a*b;
					   h = g*f;
					   i = g-h;
					   j = i+c+d;
					
					
					
					
					
					
					textField6.setText(Double.toString(j));
					
				} catch (Exception ef) { 
					
					
					JOptionPane.showMessageDialog(null, "Please Enter a Vaild Number");
				}	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			}
		});
		btnNewButton.setFont(new Font("Tahoma", Font.BOLD, 15));
		btnNewButton.setBounds(161, 315, 110, 43);
		frame.getContentPane().add(btnNewButton);
		
		textField6 = new JTextField();
		textField6.setFont(new Font("Tahoma", Font.BOLD, 15));
		textField6.setColumns(10);
		textField6.setBounds(349, 315, 93, 34);
		frame.getContentPane().add(textField6);
		
		lblCopyright = new JLabel("Copyright \u00A9 2017 Dedar Alam. All rights reserved.");
		lblCopyright.setBounds(10, 414, 295, 14);
		frame.getContentPane().add(lblCopyright);
	}
}
