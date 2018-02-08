import java.awt.*;
import java.applet.*;
import java.awt.event.*;
/*<applet code="applet21.class" height="100" width="200"></applet>*/

  public class applet21 extends Applet implements ActionListener
  {
     Button b1,b2;
	 
	 public void init()
	 {
	   b1= new Button("RED");
	   b2= new Button("YELLOW");
	   
	   add(b1);
	   add(b2);
	   
	   b1.addActionListener(this);
	     b2.addActionListener(this);
		 
	   
	 }
	 
	 public void actionPerformed(ActionEvent e)
	 {
		 String s= e.getActionCommand();
		 
		 if(s.equals("RED"))
			 setBackground(Color.red);
		 else if( s.equals("YELLOW"))
			 setBackground(Color.yellow);
		 
	 }	 
  
  }