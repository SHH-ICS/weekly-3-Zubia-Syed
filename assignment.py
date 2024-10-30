import math
large_pizza= 6.00
extra_large= 10.00
toppings_ =[1,1.75,2.50,3.35]
hst=0.13
pizza_size = input("Enter pizza size (large or extra large): ")
if pizza_size == 'large':
    base_price = large_pizza
elif pizza_size == 'extra large':
    base_price = extra_large
else:
    print("Invalid size")
    exit()
toppings = int(input("How many toppings from (1-4): "))
if 1 <= toppings <= 4:
    print("Ok")
else:
    print("Invalid number of toppings")
    exit()

topping_cost = toppings_[toppings - 1]
subtotal = base_price + topping_cost
tax = subtotal * hst
final_cost = subtotal + tax

print("topping cost =", topping_cost)
print("subtotal =", subtotal)
print("tax =", tax)
print("Great! Final cost =", final_cost)
