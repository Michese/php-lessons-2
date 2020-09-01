'use strict';
window.addEventListener('load', () => {
    const products = document.querySelector(".products");
    const product_items = products.querySelectorAll(".product__item");
    const buttonMore = document.querySelector("button.menu__link");
    product_items.forEach(product_item => {
        product_item.addEventListener('click', () => {
            document.location.href = "/?path=goods/goods_product&id_goods=" + product_item.dataset.id;
        })
    })

    if (buttonMore !== null) {

        const addMoreGoods = event => {
            let lastIdGoods = products.lastElementChild.dataset.id;
            const params = "lastIdGoods=" + lastIdGoods;

            let request = new XMLHttpRequest();
            const url = '/?path=goods/more_goods';
            request.open('post', url);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            request.addEventListener('readystatechange', () => {
                if (request.readyState === 4 && request.status === 200) {

                    let response = JSON.parse(request.responseText);
                    const answer = event.target.parentElement.querySelector(".answer");
                    if (response['result']) {
                        response['goods'].forEach(product => {
                            let product_item = "    <div class=\"product__item\" data-id=\" " + product.id_goods + "\">\n" +
                                    "        <div class=\"product_image_div\">\n" +
                                    "            <img src=\" " + product.src_small_goods + " \" class=\"product_image\">\n" +
                                    "        </div>\n" +
                                    "        <p class=\"product_content\">Название: " + product.title_goods + "</p>\n" +
                                    "        <p class=\"product_content\">Цена: " + product.price_goods + "</p>\n" +
                                    "    </div>";
                            products.insertAdjacentHTML("beforeend", product_item);
                        });
                        if (response['more'] === false) {
                            event.target.removeEventListener('click', addMoreGoods, false);
                            event.target.parentElement.remove();
                        } else {
                            answer.innerText = "Товары успешно добавлены!";
                        }

                        const product_items = products.querySelectorAll(".product__item");
                        product_items.forEach(product_item => {
                            product_item.addEventListener('click', () => {
                                document.location.href = "/?path=goods/goods_product&id_goods=" + product_item.dataset.id;
                            })
                        })

                    } else {
                        answer.innerText = "Что-то пошло не так!";
                    }

                }
            })

            request.send(params)
        }

        buttonMore.addEventListener('click', addMoreGoods, false);
    }

});