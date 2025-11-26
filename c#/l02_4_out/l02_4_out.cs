using System;
using System.Runtime.InteropServices;
namespace NumChange
{
    class NumChange
    {
        //變數傳入直接改值
        public void getValue(out int x)
        {
            int temp = 5;
            x = temp;
        }
        //能賦值給外部未定義變數
        public void getValue2(out int y, out int z)
        {
            Console.Write("輸入b的值:");
            y = Convert.ToInt32(Console.ReadLine());
            Console.Write("輸入c的值:");
            z = Convert.ToInt32(Console.ReadLine());
        }
        

        static void Main(string[] args)
        {
            NumChange n = new NumChange();

            int a = 100;
            Console.WriteLine("方法調用前:a = {0}", a);

            n.getValue(out a);
            Console.WriteLine("方法調用後:a = {0}", a);

            Console.WriteLine("-------------------------------------");

            int b, c;
            Console.WriteLine("方法調用前b,c未賦值");
            n.getValue2(out b, out c);
            Console.WriteLine("方法調用後:b = {0}, c = {1}", b, c);
        }
    }
}