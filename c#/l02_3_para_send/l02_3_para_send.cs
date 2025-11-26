using System;
namespace NumSwap
{
    class NumSwap
    {
        //無回傳(void)
        //按值傳遞參數
        public void swap(int x, int y)
        {
            int temp;
            temp = x;
            x = y;
            y = temp;
        }
        
        //引用參數(ref):參數可被外部變數取代
        public void swap2(ref int x , ref int y)
        {            
            int temp = y;
            y = x;
            x = temp;
        }


        static void Main(string[] args)
        {
            NumSwap ns = new NumSwap();

            int n = 100;
            int m = 200;
            Console.WriteLine("交換前: n = {0}, m = {1}", n, m);

            //外部參數不被影響
            ns.swap(n, m);
            Console.WriteLine("交換後(無ref): n = {0}, m = {1}", n, m);

            //加上ref，外部參數被影響
            ns.swap2(ref n, ref m);
            Console.WriteLine("交換後(有ref): n = {0}, m = {1}", n, m);
        }
    }
}