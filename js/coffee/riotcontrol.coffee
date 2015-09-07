class RiotControl
    @_stores = []
    @addStore: ( store ) ->
        @_stores.push( store )
        return
    @on: () ->
        args = [].slice.call(arguments)
        @_stores.forEach ( el ) ->
            el.on.apply null, args
            return
        return
    @off: () ->
        args = [].slice.call(arguments)
        @_stores.forEach ( el ) ->
            el.off.apply null, args
            return
        return
    @one: () ->
        args = [].slice.call(arguments)
        @_stores.forEach ( el ) ->
            el.one.apply null, args
            return
        return
    @trigger: () ->
        args = [].slice.call(arguments)
        @_stores.forEach ( el ) ->
            el.trigger.apply null, args
            return
        return

clone = ( obj) ->
    if obj == null || typeof(obj) != 'object'
        return obj
    temp = new obj.constructor()
    for key of obj
        temp[key] = clone(obj[key])
    return temp
