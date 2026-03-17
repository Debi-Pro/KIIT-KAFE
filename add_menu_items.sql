-- Additional Menu Items for KIIT KAFE
-- Run this script to add more food items to the database

USE kiit_kaffe_db;

-- Insert new menu items
INSERT INTO foods (name, description, price, category, image_url) VALUES
-- Beverages
('Pepsi', '400ml Cold Bottle', 40.00, 'Beverages', 'https://images.unsplash.com/photo-1624517452488-04869289c4ca?w=300&q=80'),
('Sprite', '400ml Cold Bottle', 40.00, 'Beverages', 'https://images.unsplash.com/photo-1629203851122-3726ec73a02f?w=300&q=80'),
('Fanta', '400ml Cold Bottle', 40.00, 'Beverages', 'https://images.unsplash.com/photo-1625772452859-1c03d5bf1137?w=300&q=80'),
('Mineral Water', '1L Bisleri', 20.00, 'Beverages', 'https://images.unsplash.com/photo-1560023907-5f339617ea30?w=300&q=80'),
('Fresh Lime Soda', 'Sweet & Tangy', 50.00, 'Beverages', 'https://images.unsplash.com/photo-1513558161099-b9096474a08b?w=300&q=80'),
('Mango Lassi', 'Traditional Yogurt Drink', 60.00, 'Beverages', 'https://images.unsplash.com/photo-1546173159-315724a31696?w=300&q=80'),

-- Coffee & Drinks
('Espresso', 'Single Shot', 70.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1510591509098-f4fdc6d0ff04?w=300&q=80'),
('Cappuccino', 'Espresso with Steamed Milk', 100.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=300&q=80'),
('Americano', 'Black Coffee', 80.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=300&q=80'),
('Mocha', 'Chocolate Coffee Blend', 110.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?w=300&q=80'),
('Caramel Macchiato', 'Vanilla & Caramel', 120.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1485808191679-5f8c7c8f37e9?w=300&q=80'),
('Green Tea', 'Organic Herbal', 50.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1597481499750-3e6b22637e12?w=300&q=80'),
('Hot Chocolate', 'Rich Cocoa Drink', 90.00, 'Coffee & Drinks', 'https://images.unsplash.com/photo-1544787219-7f47ccb76574?w=300&q=80'),

-- Snacks
('French Fries', 'Crispy Salted Fries', 80.00, 'Snacks', 'https://images.unsplash.com/photo-1573080496987-a199f8cd4054?w=300&q=80'),
('Veg Burger', 'Classic Veg Patty', 100.00, 'Snacks', 'https://images.unsplash.com/photo-1520072959219-c595dc870360?w=300&q=80'),
('Cheese Burger', 'Double Cheese Patty', 130.00, 'Snacks', 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=300&q=80'),
('Veg Momos', 'Steamed Dumplings (8pcs)', 90.00, 'Snacks', 'https://images.unsplash.com/photo-1625220194771-7ebdea0b70b9?w=300&q=80'),
('Chicken Momos', 'Steamed Dumplings (8pcs)', 120.00, 'Snacks', 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?w=300&q=80'),
('Garlic Bread', 'Toasted with Butter', 70.00, 'Snacks', 'https://images.unsplash.com/photo-1573140247631-fa9115d713fb?w=300&q=80'),
('Nachos', 'Tortilla Chips with Salsa', 100.00, 'Snacks', 'https://images.unsplash.com/photo-1513456852971-30c0b8199d4d?w=300&q=80'),
('Spring Rolls', 'Crispy Veg Rolls', 90.00, 'Snacks', 'https://images.unsplash.com/photo-1548690312-e3b507d8c110?w=300&q=80'),
('Pasta', 'Italian White Sauce', 150.00, 'Snacks', 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=300&q=80'),
('Chicken Pasta', 'Creamy Alfredo', 180.00, 'Snacks', 'https://images.unsplash.com/photo-1551183053-bf91a1d81141?w=300&q=80'),

-- Desserts
('Chocolate Brownie', 'Warm with Ice Cream', 120.00, 'Desserts', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476d?w=300&q=80'),
('Gulab Jamun', 'Traditional Sweet (3pcs)', 60.00, 'Desserts', 'https://images.unsplash.com/photo-1593251445173-168940875873?w=300&q=80'),
('Ice Cream Sundae', 'Chocolate/Strawberry', 100.00, 'Desserts', 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=300&q=80'),
('Choco Lava Cake', 'Molten Chocolate Cake', 110.00, 'Desserts', 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=300&q=80'),
('Fruit Salad', 'Fresh Seasonal Fruits', 80.00, 'Desserts', 'https://images.unsplash.com/photo-1519915028121-7d3463d20b13?w=300&q=80'),

-- Meals
('Veg Thali', 'Complete Indian Meal', 180.00, 'Meals', 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=300&q=80'),
('Chicken Biryani', 'Hyderabadi Style', 200.00, 'Meals', 'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=300&q=80'),
('Veg Fried Rice', 'Indo-Chinese Style', 140.00, 'Meals', 'https://images.unsplash.com/photo-1603133832894-0267195e09b5?w=300&q=80'),
('Egg Fried Rice', 'With Scrambled Eggs', 150.00, 'Meals', 'https://images.unsplash.com/photo-1603133832894-0267195e09b5?w=300&q=80'),
('Chicken Fried Rice', 'Classic Chinese', 170.00, 'Meals', 'https://images.unsplash.com/photo-1603133832894-0267195e09b5?w=300&q=80'),
('Paneer Butter Masala', 'With Naan', 180.00, 'Meals', 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?w=300&q=80'),
('Butter Chicken', 'With Naan', 200.00, 'Meals', 'https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?w=300&q=80');

-- Add stock for new items (starting from food_id 8)
-- Getting the max food_id first and adding stock for new items
INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Pepsi' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Pepsi'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Sprite' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Sprite'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Fanta' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Fanta'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 25 FROM foods WHERE name = 'Mineral Water' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Mineral Water'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'Fresh Lime Soda' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Fresh Lime Soda'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Mango Lassi' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Mango Lassi'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'Espresso' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Espresso'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Cappuccino' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Cappuccino'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Americano' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Americano'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Mocha' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Mocha'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Caramel Macchiato' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Caramel Macchiato'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'Green Tea' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Green Tea'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Hot Chocolate' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Hot Chocolate'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'French Fries' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'French Fries'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Veg Burger' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Veg Burger'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Cheese Burger' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Cheese Burger'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Veg Momos' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Veg Momos'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 12 FROM foods WHERE name = 'Chicken Momos' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Chicken Momos'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'Garlic Bread' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Garlic Bread'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Nachos' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Nachos'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Spring Rolls' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Spring Rolls'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 12 FROM foods WHERE name = 'Pasta' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Pasta'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Chicken Pasta' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Chicken Pasta'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Chocolate Brownie' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Chocolate Brownie'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 20 FROM foods WHERE name = 'Gulab Jamun' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Gulab Jamun'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Ice Cream Sundae' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Ice Cream Sundae'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 12 FROM foods WHERE name = 'Choco Lava Cake' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Choco Lava Cake'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 15 FROM foods WHERE name = 'Fruit Salad' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Fruit Salad'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Veg Thali' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Veg Thali'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Chicken Biryani' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Chicken Biryani'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 12 FROM foods WHERE name = 'Veg Fried Rice' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Veg Fried Rice'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Egg Fried Rice' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Egg Fried Rice'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Chicken Fried Rice' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Chicken Fried Rice'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Paneer Butter Masala' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Paneer Butter Masala'));

INSERT INTO stock (food_id, quantity) 
SELECT id, 10 FROM foods WHERE name = 'Butter Chicken' AND NOT EXISTS (SELECT 1 FROM stock WHERE food_id = (SELECT id FROM foods WHERE name = 'Butter Chicken'));
