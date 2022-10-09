namespace gpp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            label3.Text = "";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                double vize, final, ort;
               // vize = Convert.ToDouble(textBox1.Text);
                //final = Convert.ToDouble(textBox2.Text);
                vize = Convert.ToDouble(numericUpDown1.Value);
                final = Convert.ToDouble(numericUpDown2.Value);
                ort = vize * 0.4 + final * 0.6;
                label3.Text = ort.ToString();

                if (numericUpDown1.Value >= 101 || numericUpDown2.Value >= 101)
                {
                    DialogResult tus = MessageBox.Show("Lütfen 0 ile 100 arasýnda sayý giriniz"
                        , "DÝKKAT! Uygulama kapanacaktýr.", MessageBoxButtons.OKCancel);
                    if (tus == DialogResult.OK)
                    {
                        this.Close();
                    }
                    label3.Text = "";// hatalý cýkýnca iclerini sýfýrlama
                    numericUpDown1.Value = (0);
                    numericUpDown2.Value = (0);
                }

                if (ort <= 50){
                    label4.Text = "FF";
                    label5.Text = "KALDI";
                    label5.ForeColor = Color.Red;
                }
                else if (ort <= 60){
                    label4.Text = "DD";
                    label5.Text = "GEÇTÝ";
                    label5.ForeColor = Color.Green;
                }
                else if (ort <= 70) {
                    label4.Text = "CC";
                    label5.Text = "GEÇTÝ";
                    label5.ForeColor = Color.Green;
                }
                else if (ort <= 85){
                    label4.Text = "BB";
                    label5.Text = "GEÇTÝ";
                    label5.ForeColor = Color.Green;
                }
                else if ( ort <= 100 ) { 
                    label4.Text = "AA";
                    label5.Text = "GEÇTÝ";
                    label5.ForeColor = Color.Green;
                }
                
            }
            catch (Exception exit) //texboxlara harf girilirse 
            {
               /* if (textBox1.Text != "" && textBox2.Text != "")
                {
                    MessageBox.Show("Lütfen sayý giriniz ");
                } */
                

            }
          

        }
    }
}