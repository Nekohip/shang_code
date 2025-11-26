using System;
using System.IO.Compression;

namespace CircleArea2
{
    class Circle
    {
        //internal:同一個程式能使用
        internal double r;
        public double arena()
        {
            return r * r * 3.1415926;
        }

        public void display()
        {
            Console.Write("面積:{0}", arena());
        }
    }
    //Main
    class ExecuteCircleArea
    {
        static void Main(string[] args)
        {
            Circle c = new Circle();  //創建物件
            c.r = 10;
            c.arena();
            c.display();  
        }
    }
}