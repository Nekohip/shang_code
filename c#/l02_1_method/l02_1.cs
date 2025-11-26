using System;
namespace Method
{
    class MaxNum
    {
        public int FindMax(int n1, int n2)
        {
            int result;
            if (n1 > n2)
            {
                result = n1;
            }
            else
            {
                result = n2;
            }

            return result;
        }
        static void Main(string[] args)
        {
            int a = 100;
            int b = 200;
            int ret;
            MaxNum n = new MaxNum();
            ret = n.FindMax(a, b);
            Console.WriteLine("最大值是:{0}", ret);
            Console.ReadLine();
        }
    }
}