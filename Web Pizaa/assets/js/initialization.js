//Khoi tao danh sach san pham
function createProduct() {
    if (localStorage.getItem('products') == null) {
        let products = [{
                id: 1,
                status: 1,
                title: 'Margherita',
                img: './assets/pii/1.png',
                category: 'Vegetarian Pizza',
                price: 150000,
                desc: 'Classic Italian pizza with fresh mozzarella, tomatoes, and basil leaves. Simple yet delicious.'
            },
            {
                id: 2,
                status: 1,
                title: 'Pepperoni',
                img: './assets/pii/2.png',
                category: 'Meat Pizza',
                price: 180000,
                desc: 'A classic favorite topped with crispy pepperoni slices and melted mozzarella cheese.'
            },
            {
                id: 3,
                status: 1,
                title: 'BBQ Chicken',
                img: './assets/pii/3.png',
                category: 'Meat Pizza',
                price: 200000,
                desc: 'Loaded with tender chicken, barbecue sauce, onions, and a blend of cheeses.'
            },
            {
                id: 4,
                status: 1,
                title: 'Hawaiian',
                img: './assets/pii/4.png',
                category: 'Meat Pizza',
                price: 190000,
                desc: 'A tropical mix of ham, pineapple, and mozzarella cheese on a golden crust.'
            },
            {
                id: 5,
                status: 1,
                title: 'Veggie Supreme',
                img: './assets/pii/5.png',
                category: 'Vegetarian Pizza',
                price: 170000,
                desc: 'A delightful mix of bell peppers, onions, mushrooms, black olives, and fresh tomatoes.'
            },
            {
                id: 6,
                status: 1,
                title: 'Four Cheese',
                img: './assets/pii/6.png',
                category: 'Vegetarian Pizza',
                price: 210000,
                desc: 'A cheesy delight featuring mozzarella, cheddar, parmesan, and blue cheese.'
            },
            {
                id: 7,
                status: 1,
                title: 'Seafood Special',
                img: './assets/pii/7.png',
                category: 'Seafood Pizza',
                price: 220000,
                desc: 'Topped with shrimp, squid, and a hint of garlic for a unique seafood flavor.'
            },
            {
                id: 8,
                status: 1,
                title: 'Buffalo Chicken',
                img: './assets/pii/8.png',
                category: 'Meat Pizza',
                price: 200000,
                desc: 'Spicy buffalo chicken topped with ranch dressing and mozzarella cheese.'
            },
            {
                id: 9,
                status: 1,
                title: 'Spinach & Feta',
                img: './assets/pii/9.png',
                category: 'Vegetarian Pizza',
                price: 180000,
                desc: 'A creamy pizza featuring spinach, feta cheese, and a hint of garlic.'
            },
            {
                id: 10,
                status: 1,
                title: 'Mexican Fiesta',
                img: './assets/pii/10.png',
                category: 'Meat Pizza',
                price: 190000,
                desc: 'Spiced ground beef, jalapeños, onions, and a drizzle of salsa for a fiesta in every bite.'
            },
            {
                id: 11,
                status: 1,
                title: 'Mushroom Lover',
                img: './assets/pii/1.png',
                category: 'Vegetarian Pizza',
                price: 170000,
                desc: 'An earthy mix of mushrooms, mozzarella, and truffle oil on a crispy crust.'
            },
            {
                id: 12,
                status: 1,
                title: 'Meat Lover',
                img: './assets/pii/1.png',
                category: 'Meat Pizza',
                price: 240000,
                desc: 'A hearty combination of sausage, pepperoni, ham, and bacon with melted cheese.'
            },
            {
                id: 13,
                status: 1,
                title: 'Pesto Chicken',
                img: './assets/pii/1.png',
                category: 'Meat Pizza',
                price: 200000,
                desc: 'Grilled chicken with a creamy pesto base, topped with mozzarella and cherry tomatoes.'
            },
            {
                id: 14,
                status: 1,
                title: 'Garden Fresh',
                img: './assets/pii/1.png',
                category: 'Vegetarian Pizza',
                price: 160000,
                desc: 'A fresh combination of zucchini, eggplant, bell peppers, and a sprinkle of herbs.'
            },
            {
                id: 15,
                status: 1,
                title: 'Garlic Shrimp',
                img: './assets/pii/1.png',
                category: 'Seafood Pizza',
                price: 230000,
                desc: 'Juicy shrimp cooked with garlic and herbs, layered on a cheesy crust.'
            },
            {
                id: 16,
                status: 1,
                title: 'Truffle Delight',
                img: './assets/pii/1.png',
                category: 'Vegetarian Pizza',
                price: 250000,
                desc: 'Rich truffle cream base, mozzarella, and thinly sliced mushrooms for a gourmet experience.'
            },
            {
                id: 17,
                status: 1,
                title: 'BBQ Pulled Pork',
                img: './assets/pii/1.png',
                category: 'Meat Pizza',
                price: 210000,
                desc: 'Slow-cooked pulled pork with BBQ sauce, caramelized onions, and cheese.'
            },
            {
                id: 18,
                status: 1,
                title: 'Cheeseburger Pizza',
                img: './assets/pii/1.png',
                category: 'Meat Pizza',
                price: 220000,
                desc: 'All the flavors of a cheeseburger with ground beef, cheddar cheese, and pickles.'
            },
            {
                id: 19,
                status: 1,
                title: 'Greek Style',
                img: './assets/pii/1.png',
                category: 'Vegetarian Pizza',
                price: 180000,
                desc: 'A Mediterranean mix of feta cheese, olives, cherry tomatoes, and red onions.'
            },
            {
                id: 20,
                status: 1,
                title: 'Spicy Italian',
                img: './assets/pii/1.png',
                category: 'Meat Pizza',
                price: 200000,
                desc: 'Hot Italian sausage, spicy peppers, and melted mozzarella on a thin crust.'
            },
            {
                id: 21,
                status: 1,
                title: 'Chocolate Delight',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 180000,
                desc: 'A sweet treat with rich chocolate spread, marshmallows, and a sprinkle of powdered sugar.'
            },
            {
                id: 22,
                status: 1,
                title: 'Fruit Explosion',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 190000,
                desc: 'Topped with fresh strawberries, kiwi, and mango on a sweet cream cheese base.'
            },
            {
                id: 23,
                status: 1,
                title: 'Caramel Banana',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 170000,
                desc: 'Caramelized banana slices on a layer of caramel sauce and cream cheese.'
            },
            {
                id: 24,
                status: 1,
                title: 'Cinnamon Apple',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 180000,
                desc: 'Thin apple slices with cinnamon and sugar, baked to perfection.'
            },
            // Pizza with Drinks
            {
                id: 25,
                status: 1,
                title: 'Pepperoni with Coke',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 220000,
                desc: 'Classic pepperoni pizza served with a chilled can of Coca-Cola.'
            },
            {
                id: 26,
                status: 1,
                title: 'Hawaiian with Lemonade',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 230000,
                desc: 'Tropical Hawaiian pizza paired with refreshing homemade lemonade.'
            },
            {
                id: 27,
                status: 1,
                title: 'BBQ Chicken with Beer',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 250000,
                desc: 'Barbecue chicken pizza with a cold beer for the perfect pairing.'
            },
            {
                id: 28,
                status: 1,
                title: 'Veggie Supreme with Iced Tea',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 210000,
                desc: 'A fresh veggie pizza accompanied by a glass of iced tea.'
            },
            // Snack Pizza
            {
                id: 29,
                status: 1,
                title: 'Mini Margarita',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 120000,
                desc: 'Small, bite-sized margarita pizzas perfect for a quick snack.'
            },
            {
                id: 30,
                status: 1,
                title: 'Cheese Bites',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 130000,
                desc: 'Crispy pizza crust bites filled with melted cheese, perfect for dipping.'
            },
            {
                id: 31,
                status: 1,
                title: 'Pepperoni Rolls',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 140000,
                desc: 'Delicious rolls stuffed with pepperoni and mozzarella cheese.'
            },
            {
                id: 32,
                status: 1,
                title: 'Garlic Knots',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 110000,
                desc: 'Knots of pizza dough brushed with garlic butter and sprinkled with parmesan.'
            },
            // Additional options
            {
                id: 33,
                status: 1,
                title: 'Nutella Bliss',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 200000,
                desc: 'Warm pizza crust topped with Nutella and fresh berries.'
            },
            {
                id: 34,
                status: 1,
                title: 'Tropical Mojito Pizza',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 240000,
                desc: 'A fruity pizza with pineapple and mint served with a mojito mocktail.'
            },
            {
                id: 35,
                status: 1,
                title: 'Meat Feast Snack',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 150000,
                desc: 'Small bites of sausage, bacon, and pepperoni with a cheese dip.'
            },
            {
                id: 36,
                status: 1,
                title: 'Strawberry Cheesecake Pizza',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 220000,
                desc: 'A dessert pizza topped with creamy cheesecake and fresh strawberries.'
            },
            {
                id: 37,
                status: 1,
                title: 'Spicy Meatball Snack',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 150000,
                desc: 'Mini pizza bites topped with spicy meatballs and melted cheese.'
            },
            {
                id: 38,
                status: 1,
                title: 'Lemon Drizzle Pizza',
                img: './assets/pii/1.png',
                category: 'Dessert Pizza',
                price: 190000,
                desc: 'A zesty dessert pizza with lemon glaze and a sugar crust.'
            },
            {
                id: 39,
                status: 1,
                title: 'Classic Coke Pair',
                img: './assets/pii/1.png',
                category: 'Pizza with Drink',
                price: 200000,
                desc: 'Classic pizza of your choice served with a refreshing Coca-Cola.'
            },
            {
                id: 40,
                status: 1,
                title: 'Party Snack Platter',
                img: './assets/pii/1.png',
                category: 'Snack Pizza',
                price: 260000,
                desc: 'An assortment of mini pizzas, garlic knots, and dipping sauces.'
            },

        ]
        localStorage.setItem('products', JSON.stringify(products));
    }
}
// Create admin account 
function createAdminAccount() {
    let accounts = localStorage.getItem("accounts");
    if (!accounts) {
        accounts = [];
        accounts.push({
            fullname: "Phuong Thao",
            phone: "0987654321",
            password: "123456",
            address: '',
            email: '',
            status: 1,
            join: new Date(),
            cart: [],
            userType: 1
        })
        accounts.push({
            fullname: "Le Tien Vu",
            phone: "0123456789",
            password: "123456",
            address: '',
            email: '',
            status: 1,
            join: new Date(),
            cart: [],
            userType: 1
        })
        localStorage.setItem('accounts', JSON.stringify(accounts));
    }
}

window.onload = createProduct();
window.onload = createAdminAccount();