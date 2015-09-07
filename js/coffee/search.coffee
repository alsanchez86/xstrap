# begin magic !

searchStore = new SearchStore
globalConf =
    'store': searchStore

RiotControl.addStore(searchStore)
riot.mount '*', globalConf

# searchStore.getSearch() // se hace en el mount de oxe-news