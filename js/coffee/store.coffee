# Our store
class SearchStore
    constructor: ( ) ->
        riot.observable @
        @results        = {} #Object returned
        @filters        = [] #Single filters applied
        @facetFilters   = [] #Facet filters applied
        @pageSize       = 1 #pageSize
        @currentPage    = 1 #Current Page
        @init()
    init: ()->
        @getSearch()
        return
    addFilter: (word) ->
        @filters.push word
        @filters = $.unique @filters
        @currentPage = 1
        @getSearch()
        @
    addFacetFilter: (facet, value) ->
        aux = false
        facetFilter =
            "facet":facet
            "value":value

        for facet, i in @facetFilters
            if facet.value == value
                aux = true
                break
        if (!aux)
            @facetFilters.push facetFilter
            @currentPage = 1
            @getSearch()
        @
    # on init get current position
    resetFilters: () ->
        @filters = []
        @facetFilters = []
        @currentPage = 1
        @getSearch()
        @
    deleteFilter: (isFacet, filter) ->
        if isFacet
            @deleteFacetFilter(filter)
        else
            @deleteSimpleFilter(filter)

        @currentPage = 1
        @getSearch()
        @
    deleteSimpleFilter: (filter) ->
        index = @filters.indexOf(filter)
        #Removing filter from both arrays
        if index != -1
            @filters.splice(index,1)

    deleteFacetFilter: (filter) ->
        for facet, i in @facetFilters
            if facet.value == filter.value
                @facetFilters.splice(i,1)
                break
    setPageSize: (@pageSize) ->
        @currentPage = 1
        @getSearch()
        @
    setPage: (@currentPage) ->
        @getSearch()
        @
    prepare: ()->
        result =
            action:"search"
            search:[]
            facets:[]
            pageSize: @pageSize
            page: @currentPage

        for filter in @filters
            result.search.push filter
        for facet in @facetFilters
            result.facets.push facet

        @query = result
        @
    getSearch: ()  ->
        @prepare()
        $.ajax
            type: "POST",
            url: "controller.php",
            data: @query
            dataType: 'json'
        .done (data) =>
            if (typeof data == 'undefined')
                return
            @results = data
            @trigger('searched')
        return