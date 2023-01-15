<script>
    async function bubbleSort(size){
        let i=0;
        let j=0;
        for (let cur = 1; cur < size; cur++) {
            for (let next = cur + 1; next <= size; next++) {
                i = await get(cur);
                console.log(i);
                j = await get(next);
                console.log(j);
                if (j < i) {
                    await set(j,cur);
                    await set(i,next);
                }
            }
        }
        window.location.reload();
        return 0;
    }

    async function get(id){
        let x=0;
        let create_data = new FormData();
        create_data.append('index', id);

        return fetch('http://lab5/_get.php', {method: 'POST', body: create_data})
            .then(resp => resp.text())
            .then(text=>{
                x=Number(text);
                return x;
            });
    }

    async function set(val, id){
        let create_data = new FormData();
        create_data.append('index', id);
        create_data.append('element', val);

        fetch('http://lab5/_set.php', {method: 'POST', body: create_data})
            .then(resp => resp.text());
        return 0;
    }
</script>