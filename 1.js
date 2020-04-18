const datakeys = ["dumb", "ways", "the", "best"];
let data = "dumbways";

const check = (data, datakeys) => {
    for(let i = 0; i < datakeys.length; i++ ) {
        if (data.includes(datakeys[i])) {
            console.log('true');
        } else {
            console.log('false')
        }
    }
}

check(data, datakeys);