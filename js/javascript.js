fetch("https://imdb8.p.rapidapi.com/auto-complete?q=last", {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '31fc0e8bb5mshbfb4cf5b221ea59p166116jsn4ae0435dda67',
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
