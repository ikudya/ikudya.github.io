var data = {
	"glo1" : {
		"name" : "Товар 1",
		"image" : "img/img1.png",
		"cost" : 10,
	},
	"glo2" : {
		"name" : "Товар 2",
		"image" : "img/img2.png",
		"cost" : 20,
	},
	"glo3" : {
		"name" : "Товар 3",
		"image" : "img/img3.png",
		"cost" : 30,
	},
	"glo4" : {
		"name" : "Товар 4",
		"image" : "img/img4.png",
		"cost" : 30,
	},
	"glo5" : {
		"name" : "Товар 5",
		"image" : "img/img5.png",
		"cost" : 30,
	},
	"glo6" : {
		"name" : "Товар 6",
		"image" : "img/img6.png",
		"cost" : 30,
	},
	"glo7" : {
		"name" : "Товар 7",
		"image" : "img/img7.png",
		"cost" : 30,
	},
	"glo8" : {
		"name" : "Товар 8",
		"image" : "img/img8.png",
		"cost" : 30,
	},
	"glo9" : {
		"name" : "Товар 9",
		"image" : "img/img9.png",
		"cost" : 30,
	},
};

var cart = {};

takeFromStorage();
renderCart();

function addToCart(id) {
	takeFromStorage();
	if (cart[id] !== undefined) {
		cart[id]['count']++;
	} else {
		cart[id] = data[id];
		cart[id]['count'] = 1;
	}
	saveToStorage();
	renderCart();
}

function removeCount(id) {
	takeFromStorage();
	if (cart[id] !== undefined) {
		if (cart[id]['count'] > 1)
			cart[id]['count']--;
		else
			delete cart[id];
	}
	saveToStorage();
	renderCart(); 
}

function clearCart() {
	cart = {};
	saveToStorage();
	renderCart();
}

function renderCart() {
	var out = "";
	var sum = 0;
	for (var i in cart) {
		delete cart[i]['image'];
		sum += cart[i]['cost'];
		out += `<div class="item_cart">`;
		out += `<div class="image_cart">`;
		out += `<img src="${data[i]['image']}" class="work1">`;
		out += `</div>`;
		out += `<div class="info">`
		out += `<div class="description">`
		out += `<span>${cart[i]['name']}</span>`;
		out += `</div>`;
		out += `<div class="quantity">`;
		out += `<button class="plus-btn" type="button" name="button" onclick="addToCart('${i}')"><img src="img/cart/plus.svg" alt=""></button>`;
		out += `<input type="text" name="name" value="${cart[i]['count']}"></input>`;
		out += `<button class="minus-btn" type="button" name="button" onclick="removeCount('${i}')"><img src="img/cart/minus.svg" alt=""></button>`;
		out += `</div>`;
		out += `<div class="total-price">`
		out += `<span>Цена: ${cart[i]['cost']}</span>`;
		out += `</div>`;
		out += `</div>`;
		out += `</div>`;
	}
	out += `${sum}`;

	if (out == "") {
		out += `<h3>Корзина пуста</h3>`;
	} else {
		out += `<br><a onclick="clearCart()" href="sendCart.php">Отправить</a>`;
		document.cookie = "glo_order = " + JSON.stringify(cart);
	}

	if (document.getElementById('cart') != undefined) {
		document.getElementById('cart').innerHTML = out;
	}
}

function saveToStorage() {
	localStorage.setItem('cart', JSON.stringify(cart));
}
function takeFromStorage() {
	cart = JSON.parse(localStorage.getItem('cart'));
	if (cart == null) cart = {};
}