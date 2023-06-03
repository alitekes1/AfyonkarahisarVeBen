fetch("https://imdb8.p.rapidapi.com/auto-complete?q=last", {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '4aba5e6eaamsh7aa5ee6b2dc388cp140e20jsn95757e0e35d2',
		'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
	}
})
	.then(response => response.json())
	.then(data => {
		const list = data.d;
		list.map((item) => {
			console.log(item);
			const poster = item.i.imageUrl;
			const movie = `<img  src="${poster}">`;
			document.querySelector('.movies').innerHTML += movie;
		});
	})
	.catch(err => {
		console.error(err);
	});





	
