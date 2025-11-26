using System;
using System.IO.Compression;

namespace CircleArea
{
    class Circle
    {
        //私有變數，無法在其他class叫出，只能在此class使用
        private double r = 0;
        //方法，void是回傳型別，可以寫return回傳
        //括弧裡是接收參數，可接受數個如:(int a, int b))  
        public void input()
        {
            Console.Write("請輸入圓半徑:");
            r = Convert.ToDouble(Console.ReadLine());
        }

        public double arena()
        {
            return r * r * 3.1415926;
        }

        public void display()
        {
            //有回傳的方法可以直接當參數填入
            Console.Write("面積:{0}", arena());
        }
    }
    //Main
    class ExecuteCircleArea
    {
        static void Main(string[] args)
        {
            Circle c = new Circle();  //創建物件
            c.input();  //呼叫方法
            c.display();  
        }
    }
}