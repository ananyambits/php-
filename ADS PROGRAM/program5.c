#include<stdio.h>
#include<stdlib.h>
int rear=-1,front=-1;
int data,queue[10],size,i;
void enqueue()
{
if((front==0)&&(rear==size-1)||(rear==front-1))
{
printf("\nThe queue is full");
}
else
{
rear=(rear+1)%size;
printf("\nEnter the data:");
scanf("%d",&data);
queue[rear]=data;
printf("\nThe element is inserted\n");
if(front==-1)
{
front=0;
}
}
}
void dequeue()
{
if(front==-1)
{
printf("The queue is empty");
}
else
{
if(front==rear)
{
printf("the deleted is %d\n",queue[front]);
front=-1;
rear=-1;
}
else
{
printf("\nthe deleted elements is %d\n",queue[front]);
front=(front+1)%size;
}
}
}
void display()
{
if(front==-1)
{
printf("\nThe queue is empty");
}
else
{
if(front<=rear)
{
printf("\nThe elements are:");
for(i=front;i<=rear;i++)
{
printf("\t%d",queue[i]);
}
}
else
{
for(i=front;i<=size-1;i++)
{
printf("\t%d",queue[i]);
}
for(i=0;i<=rear;i++)
{
printf("\t%d",queue[i]);
}
}
}
}
int main()
{
int ch;
printf("enter the size");
scanf("%d",&size);
do
{
printf("\nEnter your choice\n.1.For insert\n2.For delete\n3.For display\n4.For exit");
scanf("%d",&ch);
switch(ch)
{
case 1:enqueue();
break;
case 2:dequeue();
break;
case 3:display();
break;
case 4:exit(0);
default:
printf("invalid");
}
}
while(1);
}



