import java.awt.*;
import java.applet.*;

/*<applet code="Myapplet.class" height="100" width="200"></applet>*/

public class Myapplet extends Applet{

   
	public void paint(Graphics g){
		showStatus("am");
		 setBackground(Color.red);
		 		 setForeground(Color.blue);
	    g.drawString("Durgesh",10,20);
	}
	
 
}