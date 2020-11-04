const list_items = document.querySelectorAll('.list-item');
const lists = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) {
	const item = list_items[i];

	item.addEventListener('dragstart', function () {
		draggedItem = item;
		setTimeout(function () {
			item.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
		}, 0)
	});

	item.addEventListener('dragend', function () {
		setTimeout(function () {
			draggedItem.style.display = 'block';
            item.style.backgroundColor = 'rgba(255, 235, 205)';
			draggedItem = null;
		}, 0);
	})

	for (let j = 0; j < lists.length; j ++) {
		const list = lists[j];

		list.addEventListener('dragover', function (e) {
			e.preventDefault();
		});
		
		list.addEventListener('dragenter', function (e) {
			e.preventDefault();
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
		});

		list.addEventListener('dragleave', function (e) {
			this.style.backgroundColor = 'rgba(85, 221, 187)';
		});

		list.addEventListener('drop', function (e) {
			console.log('drop');
			if(list)
			this.append(draggedItem);
			this.style.backgroundColor = 'rgba(85, 221, 187)';
		});
	}
}


function teste(){
	let teste1 = document.querySelectorAll('#teste1 div');
	let valor_D = 0;
	let valor_I = 0;
	let valor_S = 0;
	let valor_C = 0;

	for(i=0; i<teste1.length; i++){
		if(teste1[i].getAttribute("id") == 'D'){
			valor_D += 1;
		} else if(teste1[i].getAttribute("id") == 'I'){
			valor_I += 1;
		} else if(teste1[i].getAttribute("id") == 'S'){
			valor_S += 1;
		} else if(teste1[i].getAttribute("id") == 'C'){
			valor_C += 1;
		}
	}
	console.log('D:', valor_D, ' I:', valor_I);

	let teste2 = document.querySelectorAll('#teste2 div');

	for(i=0; i<teste2.length; i++){
		if(teste2[i].getAttribute("id") == 'D'){
			valor_D += 2;
		} else if(teste2[i].getAttribute("id") == 'I'){
			valor_I += 2;
		} else if(teste2[i].getAttribute("id") == 'S'){
			valor_S += 2;
		} else if(teste2[i].getAttribute("id") == 'C'){
			valor_C += 2;
		}
	}
	console.log('D:', valor_D, ' I:', valor_I);

	let teste3 = document.querySelectorAll('#teste3 div');

	for(i=0; i<teste3.length; i++){
		if(teste3[i].getAttribute("id") == 'D'){
			valor_D += 3;
		} else if(teste3[i].getAttribute("id") == 'I'){
			valor_I += 3;
		} else if(teste3[i].getAttribute("id") == 'S'){
			valor_S += 3;
		} else if(teste3[i].getAttribute("id") == 'C'){
			valor_C += 3;
		}
	}
	console.log('D:', valor_D, ' I:', valor_I);

	let teste4 = document.querySelectorAll('#teste4 div');

	for(i=0; i<teste4.length; i++){
		if(teste4[i].getAttribute("id") == 'D'){
			valor_D += 4;
		} else if(teste4[i].getAttribute("id") == 'I'){
			valor_I += 4;
		} else if(teste4[i].getAttribute("id") == 'S'){
			valor_S += 4;
		} else if(teste4[i].getAttribute("id") == 'C'){
			valor_C += 4;
		}
	}

	let mediaD = valor_D/8*100
	let mediaI = valor_I/8*100
	let mediaS = valor_S/8*100
	let mediaC = valor_C/8*100
	
	console.log('D:', mediaD, ' I:', mediaI, 'S:', mediaS, ' C:', mediaC);

	if((mediaD >= mediaS) && (mediaD >= mediaI) && (mediaD >= mediaC)) {
        window.location.href = "./trilhad.php"
    } else if ((mediaI >= mediaD) && (mediaI >= mediaS) && (mediaI >= mediaC)) {
        window.location.href = "./trilhai.php"
    } else if ((mediaS >= mediaD) && (mediaS >= mediaI) && (mediaS >= mediaC)) {
        window.location.href = "./trilhas.php"
    } else if ((mediaC >= mediaD) && (mediaC >= mediaS) && (mediaC >= mediaI)) {
        window.location.href = "./trilhac.php"
    } else {
		window.location.href = "./trilhaIN.php"
	}


}