#include"FibonacciHeap.h"
#include"DoublyLinkedList.h"
void FibHeap::insert(type key) {
	FibNode *newnode = new FibNode(key);
	if (!Min) {
		rootlist->addToTail(newnode);
		Min = newnode;
		return;
	}
	rootlist->addToTail(newnode);
	if (Min->key > key) {
		Min = newnode;
	}
	return;
}